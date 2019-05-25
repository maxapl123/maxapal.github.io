<body data-spy="scroll">
<div id="container">
<!--Кнопка Поиска-->
<form style="position:absolute;left:40px;top:10px;width:300px;height:50px;"  method="GET" action="search.php?q=">
<div class="box">
<div  class="container-4">
<input type="text" id="input-search" name="q" placeholder="Поиск ..." value="<?php if ($_GET["q"]) echo $_GET["q"]; ?>" />
<button class="icon"><i class="fa fa-search"></i></button>
</div>
</div>
</form>
<!--Подключение к иконкам-->
<link href=" http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<!-- КонецПодключение к иконкам-->
<style>
.container-4{ /*Само поле -*/
  overflow: hidden;
  width: 300px;
  vertical-align: middle;
  white-space: nowrap;}
.container-4 input#input-search{ /*Поле ввода-*/
  width: 200px;
  height: 50px;
  background: white;  /*Цвет фона*/
  border: none;
  font-size: 15pt;    /*Размер шрифта*/
  float: left;
  color: #FF65AD;     /*Цвет шрифта*/
  padding-left: 15px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;}
.container-4 input#input-search::-webkit-input-placeholder {
   color: #FF65AD;   /*Цвет первоначальной записи (Поиск)*/}
.container-4 input#input-search:-moz-placeholder { /* Firefox 18- */
   color: #FF65AD;   /*Цвет первоначальной записи (Поиск)*/  }
.container-4 input#input-search::-moz-placeholder {  /* Firefox 19+ */
   color: #FF65AD;   /*Цвет первоначальной записи (Поиск)*/}
.container-4 input#input-search:-ms-input-placeholder {  
   color: #FF65AD;   /*Цвет первоначальной записи (Поиск)*/}
.container-4 button.icon{
  -webkit-border-top-right-radius: 5px;
  -webkit-border-bottom-right-radius: 5px;
  -moz-border-radius-topright: 5px;
  -moz-border-radius-bottomright: 5px;
  border-top-right-radius: 5px;
  border-bottom-right-radius: 5px;
  border: none;
  background: #FF65AD; /*Цвет кнопки*/
  height: 45px; /*Размер кнопки (Высота)*/
  width: 45px; /*Размер кнопки (Ширина)*/
  color: white; /*Цвет значка на кнопке*/
  opacity: 0;
  font-size: 15pt; /*Размер значка на кнопке*/
  -webkit-transition: all .55s ease;
  -moz-transition: all .55s ease;
  -ms-transition: all .55s ease;
  -o-transition: all .55s ease;
  transition: all .55s ease;}
.container-4:hover button.icon, .container-4:active button.icon, .container-4:focus button.icon{
    outline: none;
    opacity: 1;
    margin-left: -50px;  }
  .container-4:hover button.icon:hover{
    background: #FF65AD; /*Цвет кнопки при наведении*/  }
</style>
<!--Конец Кнопка Поиска-->
</div>
</body>