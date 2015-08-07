# _address-book_

##### Simple address book in Silex/Twig, 08/07/15

#### By _**Ashlin Aronin**_

## Description

address-book allows users to input contacts (name, phone, and address) to store them in an address book. After adding contacts, they can delete them individually or clear their entire address book and start over. Contacts are stored in cookies, so they will only be saved as long as the user's cookies. The application is implemented in PHP using the Silex micro-framework and Twig template engine. Anyone who is interested in using this code for any reason is welcome to do so, though I can't see any reason why you would want to.

## Setup

* Clone the repository from GitHub. If you don't know how to do that, Epicodus has a [good tutorial](https://www.learnhowtoprogram.com/lessons/git-clone "Git-Clone Tutorial")
* Run "composer install" in the root address-book folder
* Start a PHP server in /web by running "php -S localhost:8000"
* Visit localhost:8000 and enjoy!

This is a relatively simple app. I use the Composer dependency manager, so you can install all of the necessary dependencies easily using "composer install." Once you've done that, it's just a matter of getting a PHP server running.

## Technologies Used

HTML/CSS/Bootstrap used for display in Twig templates. The app is implemented in PHP using the Model View Controller design pattern in the Silex micro-framework.

### Legal

Copyright (c) 2015 **_Ashlin Aronin_**

This software is licensed under the MIT license.

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
