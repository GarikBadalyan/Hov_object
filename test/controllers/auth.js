const mysql = require("mysql");
//представляет собой веб-стандарт который определяет способ передачи данных о пользователе в формате JSON в зашифрованном виде
const jwt = require('jsonwebtoken');
//библиотека которая поможет хэшировать пароли
const bcrypt = require('bcryptjs')
const db = mysql.createConnection({
    host:process.env.DATABASE_HOST,
    user:process.env.DATABASE_USER,
    password:process.env.DATABASE_PASSWORD,
    database:process.env.DATABASE
});
exports.login = async (req,res) => {
    try {
        const {email, password } = req.body;
        console.log(req.body)
        if(!email || !password){
                  //клиентские ошибки
            return res.status(400).render('login',{
                message:'Please provide an email end password'
            })
        }
        db.query('SELECT * FROM users WHERE email = ?', [email], async (error,results)=>{
           console.log(results[0]['name'])
            console.log(results[0]['id'])
            console.log(results)
            if( !results || !(await bcrypt.compare(password, results[0].password)) ){
               res.status(401).render('login',{
                   message: 'Email or Password is incorrect'
               })
           } else {
                return res.render('home')
                /*
                const id = results[0].id;
                const token = jwt.sign({id}, process.env.JWT_SECRET,{
                    expiresIn:process.env.JWT_EXPIRES_IN
                })
                console.log( 'the token is:' + token);
                const cookieOptions = {
                    expires: new Date(
                     Date.now() + process.env.JWT_COOKIE_EXPIRES * 24 * 69 * 60 * 1000),
                    httpOnly:true //Использование флага HttpOnly при создании файла cookie помогает снизить риск доступа сценария на стороне клиента к защищенному cookie
                }
                //используется для установки значения имени файла cookie
                res.cookie('jwt', token, cookieOptions);
                */
            }
        })
    } catch (error){
        console.log(error)
    }
}

exports.register = (req,res)=>{
    console.log(req.body);//Содержит пары ключ-значение данных, отправленных в теле запроса
       /*
       const name = req.body.name;
       const email = req.body.email;
       const password = req.body.password;
       const passwordConfirm = req.body.passwordConfirm;
       */
    const {name, email, password, passwordConfirm } = req.body;
                    //выбрать email от user
    db.query('SELECT email FROM users WHERE email = ?', [email], async (error, results)=>{
        if(error){
            console.log(error)
        } if (name === "" ) {
            return res.render('register',{
                message: '"name" is a required field'
            })}
        if(results.length > 0){
            return res.render('register',{
                message: 'That email is already in use'
            })
        }
        else if(password !== passwordConfirm){
            return res.render('register',{
                message: 'Passwords do not match'
            })
        }
        let hashedPassword = await bcrypt.hash(password, 8);
        console.log(hashedPassword)
        //res.send("testing")
                 //ВСТАВИТЬ в users набор
        db.query('INSERT INTO users SET ?', {name: name, email: email, password: hashedPassword }, (error,results)=>{
            if(error){
                console.log(error);
            }else{
                return res.render('home',{
                    message:'User registered'
                })
            }
        })
    })
}