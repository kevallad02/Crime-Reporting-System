<html>
<head>
<link rel="stylesheet" href="css/style.css">
<style>

@font-face {
  font-family: "Muli-Regular";
  src: url("../fonts/muli/Muli-Regular.ttf"); }
@font-face {
  font-family: "Muli-SemiBold";
  src: url("../fonts/muli/Muli-SemiBold.ttf"); }
@font-face {
  font-family: "Muli-Bold";
  src: url("../fonts/muli/Muli-Bold.ttf"); }
* {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box; }

body {
  font-family: "Muli-Regular";
  font-size: 13px;
  background: linear-gradient(135deg, #191970, #000080);
  margin: 0; }

  label {
    color: #000;
    font-size: 15px;
  }

input, textarea, select, button {
  font-family: "Muli-Regular";
  color: #000;
  font-size: 15px; }

p, h1, h2, h3, h4, h5, h6, ul {
  margin: 0; }

img {
  max-width: 100%; }

ul {
  padding-left: 0;
  margin-bottom: 0; }

a:hover {
  text-decoration: none; }

:focus {
  outline: none; }

.wrapper {
  min-height: 100vh;
  background-size: cover;
  background-repeat: no-repeat;
  display: flex;
  align-items: center; }

.inner {
  min-width: 850px;
  margin: auto;
  padding-top: 68px;
  padding-bottom: 48px;
  align-items: center;
  }

  .inner h3 {
    text-transform: uppercase;
    font-size: 22px;
    font-family: "Muli-Bold";
    text-align: center;
    margin-bottom: 32px;
    color: #000

   }

form {
  width: 50%;
  padding-left: 45px; }

.form-group {
  display: flex; }
  .form-group .form-wrapper {
    width: 50%; }
    .form-group .form-wrapper:first-child {
      margin-right: 20px; }

.form-wrapper {
  margin-bottom: 17px; }
  .form-wrapper label {
    margin-bottom: 9px;
    display: block; }

.form-control {
  border: 1px solid rgb(247, 243, 243);
  display: block;
  width: 100%;
  height: 40px;
  padding: 0 20px;
  border-radius: 20px;
  font-family: "Muli-Bold";
  background: none; }
  .form-control:focus {
    border: 1px solid #ae3c33; }

select {
  -moz-appearance: none;
  -webkit-appearance: none;
  cursor: pointer;
  padding-left: 20px; }
  select option[value=""][disabled] {
    display: none; }

button {
  border: none;
  width: 152px;
  height: 40px;
  margin: auto;
  margin-top: 29px;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 0;
  background: #ae3c33;
  font-size: 13px;
  color: #fff;
  text-transform: uppercase;
  font-family: "Muli-SemiBold";
  border-radius: 20px;
  overflow: hidden;
  -webkit-transform: perspective(1px) translateZ(0);
  transform: perspective(1px) translateZ(0);
  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
  position: relative;
  -webkit-transition-property: color;
  transition-property: color;
  -webkit-transition-duration: 0.5s;
  transition-duration: 0.5s; }
  button:before {
    content: "";
    position: absolute;
    z-index: -1;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: #f11a09;
    -webkit-transform: scaleX(0);
    transform: scaleX(0);
    -webkit-transform-origin: 0 50%;
    transform-origin: 0 50%;
    -webkit-transition-property: transform;
    transition-property: transform;
    -webkit-transition-duration: 0.5s;
    transition-duration: 0.5s;
    -webkit-transition-timing-function: ease-out;
    transition-timing-function: ease-out; }
  button:hover:before {
    -webkit-transform: scaleX(1);
    transform: scaleX(1);
    -webkit-transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
    transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66); }

.checkbox {
  position: relative; }
  .checkbox label {
    padding-left: 22px;
    cursor: pointer; }
  .checkbox input {
    position: absolute;
    opacity: 0;
    cursor: pointer; }
  .checkbox input:checked ~ .checkmark:after {
    display: block; }

.checkmark {
  position: absolute;
  top: 50%;
  left: 0;
  transform: translateY(-50%);
  height: 12px;
  width: 13px;
  border-radius: 2px;
  background-color: #ebebeb;
  border: 1px solid #ccc;
  font-family: Material-Design-Iconic-Font;
  color: #000;
  font-size: 10px;
  font-weight: bolder; }
  .checkmark:after {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    display: none;
    content: '\f26b'; }

@media (max-width: 991px) {
  .inner {
    min-width: 768px; } }
@media (max-width: 767px) {
  .inner {
    min-width: auto;
    background: none;
    padding-top: 0;
    padding-bottom: 0; }
    

  form {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px; } 
  }

.value {
  color: rgb(247, 243, 243);

}

  body  {
    background-image: url("bg1.jpg");
    background: linear-gradient(135deg, #191970, #000080);
   
}
.center {
         margin-left: auto;
         margin-right: auto;

     }
     .inner{
  max-width: 500px;
  width: 100%;
  background-color: #fff;
  padding: 25px 25px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
}


</style>
</head> 

<body>

<div class="wrapper" style="background-image: url('img/bg.jpg');">
<div class="inner">
<form method="POST" action="{{route('todo.update',$todo->id)}}" class="center" >
@csrf
@METHOD('PUT')
            <h3>Student Registration</h3>
                    <div class="form-group">
						<div class="form-wrapper">
							<label for="fname">First Name</label>
							<input type="text" class="form-control" name="fname" value="{{$todo->fname}}" required>
						</div>
						<div class="form-wrapper">
							<label for="lname">Last Name</label>
							<input type="text" class="form-control" name="lname" value="{{$todo->lname}}" required>
						</div>
					</div>
					<div class="form-wrapper">
						<label for="email">Email</label>
						<input type="text" class="form-control" name="email" value="{{$todo->email}}" required>
					</div>
					<div class="form-wrapper">
						<label for="phone">Phone Number</label>
						<input type="tel" class="form-control" name="phone" value="{{$todo->phone}}" required>
					</div>
                <button>submit</button>


            </form>
			</div>
		</div>
</body>
</html> 
