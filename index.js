//const express=require('express'); 
import express from 'express'; //em6 x babel 
//const morgan=require('morgan');
import morgan from 'morgan';
//const cors=require('cors');
import cors from 'cors';
import path from 'path';

const app=express();

app.use(morgan('dev'));
app.use(cors());

app.use(express.json()); // analiza 
app.use(express.urlencoded({extend:true}));
app.use(express.static(path.join(__dirname,'public')));

app.set('port', process.env.PORT || 3000);

app.listen(app.get('port'), () => {
    console.log('puerto de ejecucion :'+app.get('port'));
    //console.log('ruta > '+ __dirname+'\\public');
    console.log(path.join(__dirname,'public'));
});