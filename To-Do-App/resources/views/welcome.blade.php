@extends('layouts.frontend')
@section('content')
<!DOCTYPE html>
<html>
<head>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
</head>
<body class="w3-light-grey">

<!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1400px">

<!-- Header -->
<header class="w3-container w3-center w3-padding-32"> 

  <h1 style="color:white;"><b>Z3 TO-DO-APP</b></h1>
  <p style="color:tomato;">Welcome to the Z3 to do to app <span class="w3-tag">Premium</span></p>
</header>
<hr>
<!-- Grid -->
<div >

<!-- Blog entries -->
<div>
  <!-- Blog entry -->
  <div class="w3-card-4 w3-margin w3-white">
    <center>
    
    <div class="w3-container">
      <h3><b>Z3 FOR YOU</b></h3>
      <h5>Luanched <span class="w3-opacity">April 9, 2023</span></h5>
    </div>
    </center>
    <div class="w3-container">
      <p style="text-indent: 50px;">The Z3 created a To-Do web application using the PHP Laravel framework. Laravel is a popular PHP framework that provides developers with a variety of features and tools, such as Eloquent ORM, Blade templating engine, and Artisan command-line interface, that make web development more efficient and less tedious.
      </br> </br>
Z3 web application is designed to help users manage their daily tasks and activities more effectively. Users can create an account, which allows them to store their to-do notes and activities. After creating an account, users can add, update, or delete their to-do notes and activities as needed.

The web application's database is built using phpMyAdmin, which is a popular tool for managing databases. PhpMyAdmin enables users to manage their data more efficiently by providing a user-friendly interface for creating, managing, and modifying database structures.
</br> </br>
Z3 web application's user interface is designed to be simple and intuitive, making it easy for users to create and manage their to-do notes and activities. The user interface allows users to add new tasks, view existing tasks, update tasks, and delete tasks.

One of the most significant advantages of your web application is its flexibility. Users can use it to manage any type of task or activity, whether it's a work-related project or a personal goal. Additionally, users can easily prioritize their tasks and activities, making it easier for them to manage their time effectively.
</br> </br>
Overall, Z3 To-Do web application is an impressive achievement that demonstrates my skills and knowledge in web development. It is an excellent tool for users looking to manage their daily tasks and activities more effectively, and it provides a user-friendly interface that makes it easy to use. Congratulations on useing this web app, and I wish you the best of luck in your future endeavors!</p>
      <div class="w3-row">
      </div>
    </div>
  </div>
  <hr>
  <center>
  <img src="{{asset('logo.jpg')}}" alt="Nature" style="width:30%">
</center>
  <hr>

  <div class="w3-card-4 w3-margin w3-white">
    <center>
    <h2>How To Use</h2>
    </center>

 <!-- Posts -->
 <div class="w3-card w3-margin">
    <div class="w3-container w3-padding">
    </div>
    <ul class="w3-ul w3-hoverable w3-white">
      <li class="w3-padding-16">
        <img src="{{asset('login.png')}}" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">Step 01</span><br>
        <span>The first step in using Z3 application is to create a user account. Users can easily create an account by clicking on the 'register' button on the application's homepage. This will take them to a registration page where they can enter their personal information, including their name, email address, and a password.

Once a user has successfully registered, they can then log in to the system using the 'login' button on the homepage. This will take them to a login page where they can enter their email address and password to access their account.</span>
      </li>

      <li class="w3-padding-16">
        <img src="{{asset('todo.jpg')}}" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">Step 02</span><br>
        <span>The second step in using Z3 application is to add notes or activities to the user's profile. Users can do this by clicking on the 'add activity' or 'add note' button on their profile page. This will open a form where they can enter details about the note or activity, such as the title, description, due date, and priority level.

If the user wants to update or delete a note or activity, they can select the 'read more' button on the corresponding note or activity. This will take them to a page where they can view more details about the note or activity and perform actions such as updating or deleting it.</span>
      </li>

      <li class="w3-padding-16">
        <img src="{{asset('enjoy.png')}}" alt="Image" class="w3-left w3-margin-right" style="width:50px">
        <span class="w3-large">Step 03</span><br>
        <span>The final step in using Z3 application is to enjoy it! Z3 To-Do web application is designed to be user-friendly, intuitive, and efficient. It enables users to manage their tasks and activities effectively, and it provides them with the tools they need to stay organized and on top of their responsibilities.

In conclusion, Z3 To-Do web application is an excellent tool for anyone looking to manage their daily tasks and activities more efficiently. It provides users with a straightforward, user-friendly interface that makes it easy to add, update, and delete notes and activities. Additionally, the ability to prioritize tasks and set due dates ensures that users stay on top of their responsibilities. Congratulations on building this application, and I wish you the best of luck in your future endeavors!</span>
      </li>
      
    </ul>
  </div>
  <hr> 

    <div class="w3-container">
      <div class="w3-row">
      </div>
    </div>
  </div>
  <hr>


</body>
</html>


@endsection