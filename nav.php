<!DOCTYPE html>
<html lang="en">

<head>
</head>

<body>
    <nav>
        <h1>home</h1>
        <h1>my code</h1>
        <div class="dropdown">
            <h1><button class="dropbtn">account</button></h1>

            <div class="dropdown-content">
                <a href="#">profile</a>
                <a href="#">?</a>
                <a href="#">logout</a>
            </div>
        </div>



    </nav>



    <style>
        nav {
            background-color: gray;
            display: flex;
            flex-direction: row;
            justify-content: space-around;
        }

        .dropbtn {
            background-color: #C3C3C3;
            font-size: 22px;
            border: none;
            cursor: pointer;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #D9D9D9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
</body>

</html>