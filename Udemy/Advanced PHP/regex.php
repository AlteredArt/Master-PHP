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
<?php 
