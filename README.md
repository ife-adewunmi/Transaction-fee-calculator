# TRANSACTION FEE CALCULATOR WITH PHP Ajax 

## Description

This **Web application** is a simple approach to solving **Parkway Projects Limited** Assessment task one; which is to write a simple program that reads the fee configuration from a file, accepts an "Amount to be transferred" as input, use the amount configuration in the file to compute the expected charge, and outputs the charge.

## What Are The Technologies  Used?

The following tools and languages are used to complete this **PHP Ajax TRANSACTION FEE CALCULATOR** task:
```

** OOP PHP       [ check.php, Transfer.php class ]
** Json          [ config.json ]
** Xml           [ check.php, Transfer.php, index.php: To output results ]
** jQuery        [ ajax.js: To send asynchronous request to the php oop method ]
** Bootstrap CSS [ index.php: To style up the index page]


```

## What Are The Steps Taken?

1.  Created a form to collect user transfer amount data in **index.php**
2.  On clicking the submit button, the scripts in **ajax.js** is executed to get and send user data to the **check.php**
3.  In check.php, a **new instance of Transfer() method was declared**, this method takes the name of the input field used to collect user transfer amount at 1 above as an argument  and was to return a **xmloutput()** this is a PHP 5.4 syntax
4.  In the **Transfer.php** at **execute() funtion** which takes the $amount variable instantiated in the Transfer class **_contruct() function**, the config.json was fecthed using php ```file_get_contents()``` method, converted to array using php ```json_decode()``` method, Iterated through using a ```foreach()``` loop, then the user transfer amount was compared with some objects in the configuration file to give result rendered in the **xmlOutput() function** 



**P.S.** *There are tons of approaches to solve this problem. You are free to improve it or change it! Good luck.*

## Who is the Author?

Ifeoluwa Adewunmi


## How to Contact the Author?

By email at: *<ifeoluwa.adewunmi94@gmail.com>*


## What is the License?
