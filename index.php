<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body{
  padding:0;
  margin: 0;
  box-sizing: border-box;
  display: flex;
  justify-content: center;
  align-items: center;
}

table{
  height: 100vh;
  width: 100%;
}

table, th, td {
  border:1px solid black;
}

td{
  height: 220px;
  width:250px;
}

.d0,.d1,.d2,.d3,.d4,.d5,.d6,.d7,.d8,.d9
{
  height: 100%;
  width: 100%;
  background: yellow;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

.d0{
  background-image: url('background images/b0.jpg');
}
.d1{
  background-image: url('background images/b1.jpg');
}
.d2{
  background-image: url('background images/b2.jpg');
}
.d3{
  background-image: url('background images/b3.jpg');
}
.d4{
  background-image: url('background images/b4.jpg');
}
.d5{
  background-image: url('background images/b5.jpg');
}
.d6{
  background-image: url('background images/b6.jpg');
}
.d7{
  background-image: url('background images/b7.jpg');
}
.d8{
  background-image: url('background images/b8.jpg');
}
.d9{
  background-image: url('background images/b9.jpg');
}
#icon{
  color:rgba(216,250,8,0.8);
  font-size:3rem;
  display: flex;
  justify-content: center;
  line-height: 500px;
  back-filter:blur(5px;)
}
.base_icon{

}
</style>
</head>
<body>
    <table>
      <tr>
        <td><div class='d0'><div class="base_icon"><i id="icon" class="fa fa-image"></i></div></div></td>
        <td><div class='d1'><div class="base_icon"><i id="icon" class="fa fa-image"></i></div></div></td>
        <td><div class='d2'><div class="base_icon"><i id="icon" class="fa fa-image"></i></div></div></td>
        <td><div class='d3'><div class="base_icon"><i id="icon" class="fa fa-image"></i></div></div></td>
        <td><div class='d4'><div class="base_icon"><i id="icon" class="fa fa-image"></i></div></div></td>
      </tr>
      <tr>
        <td><div class='d5'><div class="base_icon"><i id="icon" class="fa fa-image"></i></div></div></td>
        <td><div class='d6'><div class="base_icon"><i id="icon" class="fa fa-image"></i></div></div></td>
        <td><div class='d7'><div class="base_icon"><i id="icon" class="fa fa-image"></i></div></div></td>
        <td><div class='d8'><div class="base_icon"><i id="icon" class="fa fa-image"></i></div></div></td>
        <td><div class='d9'><div class="base_icon"><i id="icon" class="fa fa-image"></i></div></div></td>
      </tr>
    </table>
</body>
</html>
