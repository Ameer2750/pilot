
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        x-header, x-footer {
            /* You can add styles for your custom elements here */
            display: block;
            background-color: #fcb800;
            color: #fff;
            padding: 10px;
            
        }

        ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            background-color: #fcb800;
            justify-content: space-around;
        }

        li {
            margin: 0;
            padding: 10px;
            cursor: pointer;
            font-weight: bold;

        }

        li:hover {
         color: white;
        }
    </style>


<x-header />



<ul>
    <li>HOME</li>
    <li>SEVAS/SERVICES</li>
    <li>ABOUT US</li>
    <li>ANNUAL EVENTS</li>
    <li>DONATIONS</li>
    <li>PHOTOS</li>
    <li>SONGS</li>
    <li>VIDEOS</li>
    <li>CONTACT US</li>
</ul>

<x-footer />
