function foo(a, b) {
  if (a === b) {
    return true; // This line is incorrect 
  } else {
    return false;
  }
}

//This function will always return true because PHP loose comparison. 
//If you expect strict comparison you must use === instead of ==
//Example:
$result = foo(1, "1"); //This will return true in PHP
$result = foo(1, 1); //This will return true in PHP