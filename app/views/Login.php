<?php
$pageTitle = 'Home'; // Set the page title for the header
include __DIR__.'/Components/header.php'; // Include the header
?>





<main class="flex justify-center w-full">

  <form method="post">
    <h2 class="font-thin text-4xl">Login</h2>
    <div class="flex flex-col gap-3 mt-5 font-['Poppins'] items-start">
        <div  class="flex flex-col">
            <label for="email" class="my-2">Username or Email Address *</label>
            <input type="text" name="email" placeholder="" id="email" class="p-4 rounded-sm border-gray-400 border-[1px] bg-transparent outline-blue-500 w-[25dvw]" >
        </div>
        <div  class="flex flex-col">
            <label for="password" class="my-2">Password *</label>
            <input type="password" id="password" name="password" class="p-4 rounded-sm border-gray-400 border-[1px] bg-transparent outline-blue-500 w-[25dvw]">
        </div>

        <div class="flex justify-between w-full mt-5 items-center" >
            <div>
                <input type="checkbox" name="remember" id="remember" >
                <label for="remember">Remember me </label>
            </div>

            <a href="<?=ROOT?>Signup" class="italic text-sm">not registered? </a>
        </div>
       
       <input type="submit" value="Log In" class="bg-blue-500 text-white px-8 py-2 items-center cursor-pointer">
        
    </div>
  </form>

</main>











<?php
include __DIR__.'/Components/footer.php'; // Include the footer
?>