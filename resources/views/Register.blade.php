<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <title>Register</title>
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    </head>
    <body class=
                "bg-[url('https://img.wallpapic.com/i6550-547-621/medium/3d-art-glass-green-wallpaper.jpg')] bg-cover bg-center h-screen w-full bg-no-repeat flex items-center justify-center ">
            
            <div class="max-w- [960px] bg-green-50/80 h-125 w-120 grid gap-5 p-10 rounded-2xl mt-8">
                <div class="grid gap-5"> 
                    <form action="register.php" method="POST" class="space-y-5">

                        <h1 class="p-1 flex justify-center text-xl font-bold"> Register</h1><br>


                            <label for="username">Username:<br></label>
                            <input type="text" name="fullname" placeholder="Enter Username" class ="w-100 bg-white py-1 px-2 rounded-xl 
                                        focus:bg-green-100 focus:outline-none focus:ring-1 focus:ring-black focus:dropshadow"required><br>

                            <label for="email">Email:<br></label>
                            <input type="email" name="email" placeholder="Email Address" class ="w-100 bg-white py-1 px-3 rounded-xl 
                                        focus:bg-green-100 focus:outline-none focus:ring-1 focus:ring-black focus:dropshadow"required><br>

                            <label for="password">Password:<br></label>
                            <input type="password" name="password" placeholder="Password" class ="w-100 bg-white py-1 px-2 rounded-xl 
                                        focus:bg-green-100 focus:outline-none focus:ring-1 focus:ring-black focus:dropshadow" required><br>

                            <div class="flex justify-center items-center bg-indigo-300 rounded-xl">
                                <button type="submit" class="p-1 w-30 flex justify-center items-center text-1xl font-bold">Create Account</button>
                            </div>
                    </form>
            </div>
        </div>
    </body>
    </html>