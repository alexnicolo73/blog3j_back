<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>

    <body class="antialiased">
        <div>

           <form action="newblog">
            <div class="form">
                <div class="title">Welcome</div>
                <div class="subtitle">Let's create your account!</div>
                <div class="input-container ic1">
                  <input id="firstname" class="input" type="text" placeholder=" " />
                  <div class="cut"></div>
                  <label for="firstname" class="placeholder">First name</label>
                </div>
                <div class="input-container ic2">
                  <input id="lastname" class="input" type="text" placeholder=" " />
                  <div class="cut"></div>
                  <label for="lastname" class="placeholder">Last name</label>
                </div>
                <div class="input-container ic2">
                  <input id="email" class="input" type="text" placeholder=" " />
                  <div class="cut cut-short"></div>
                  <label for="email" class="placeholder">Email</>
                </div>
                <button type="text" class="submit">submit</button>
              </div>
           </form>

        </div>
    </body>
</html>
