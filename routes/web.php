<style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        header {
            background-color: #4CAF50;
            color: white;
            padding: 1em;
            text-align: center;
        }

        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }

        nav ul li {
            float: left;
        }

        nav ul li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        nav ul li a:hover {
            background-color: #111;
        }

        main {
            padding: 20px;
        }

        section {
            margin-bottom: 20px;
        }
        h1 {
    font-family: 'Roboto', sans-serif; /* Use a clean and modern font */
    font-size: 2.5em; /* Larger font size for emphasis */
    font-weight: bold; /* Bold weight for importance */
    color: #333; /* Dark grey color for readability */
    text-align: center; /* Center alignment */
    margin-top: 0.5em; /* Top margin for spacing */
    margin-bottom: 0.5em; /* Bottom margin for spacing */
    padding: 0.5em; /* Padding for a better appearance */
    background-color: #f8f8f8; /* Light background color */
    border-radius: 10px; /* Rounded corners */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
    letter-spacing: 0.05em; /* Slightly increased letter spacing */
}

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>

<?php

use Illuminate\Support\Facades\Route;



Route::get('/home', function () {
    return view('welcome');
});

Route::get('/{id?}', function (string $id = null) {
    if($id){
        return "<h1 >You Enter The Value: ".$id."</h1>";
    } else{
        return "<h1 >Please Enter the Value after Port number: </h1>";
    }
    
});
