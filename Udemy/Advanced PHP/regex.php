<!-- Regular Expression -->
<!-- Php uses PCRE in Regex -->
<!-- REGEX101.COM -->

<!-- Use backslash to match literally : Examples-->
<!-- [abc] : matches exact character -->
<!-- [a-z] : matches a range -->
<!-- [a-zA-z] : Case Sensitive range -->
<!-- [0-9] : Range of numbers -->
<!-- [^abc] : any character but... -->

<!-- Shorthand classes -->
<!-- \d : [0-9] , matches any digit -->
<!-- \w : [a-zA-Z_], matches any word character -->
<!-- \s : whitespace -->
<!-- \D : negation of \d, matches non digit -->
<!-- \W : negation of \w, matches non word characters -->
<!-- \S : negation of \s, matches non whitespace -->

<!-- Dot Character -->
<!-- .example -->

<!-- Group (Can be used to capture subtext) -->
<!-- (hello)\1 -->

<!-- Alternation (|) Matches either left or right side -->
<!-- alpha | beta : Matches a text that contains either "alpha" or "beta" -->
<!-- (mon|tues|sun)day : Matches monday, tuesday, or sunday -->

<!-- Quantifiers (defines Occurrences) -->
<!-- ********* Example: [a-z]* (Captures all) -->
<!-- {n} : matches n times -->
<!-- {n,} : matches n or more times -->
<!-- {n, m} : matches between n and m times -->
<!-- * : {0,} => zero or more -->
<!-- ? : {0,1} => zero or more -->
<!-- + : {1,} => one or more -->

<!-- Anchors (Match Position) -->
<!-- ^ : matches the beginning of text -->
<!-- $ : matches the end of text -->

<!-- Regex Compatible Functions -->
<!-- preg_match -->
<!-- preg_match_all -->
<!-- preg_replace -->
<!-- preg_split -->
<!-- preg_quote -->
<!-- preg_filter -->

<?php 
function validateEmail ($text) {
    $emailPattern = "/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$";

    if( preg_match($emailPattern, $text)) {
        return true;
    }
    return false;
}

var_dump(validateEmail)('user@yahoo.com'));
var_dump(validateEmail)('hahahaha'));





function numberValidation ($text) {
    $numberPattern = '/\d/';

    if (preg_match($numberPattern, $text)) {
        return true;
    }
    return false;
}

var_dump(validateNumber('12345'));
var_dump(validateNumber('this is not a number'));