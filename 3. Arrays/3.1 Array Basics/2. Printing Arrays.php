2. Printing Arrays

In the PHP Basics chapter, we illustrated how the echo statement can be used to output the value of an expression — including that of a single variable.
While echo is extremely useful, it exhibits some limitations that curb its helpfulness in certain situations.

For example, while debugging a script, one often needs to see not just the value of an expression, but also its type.
Another problem with echo is in the fact that it is unable to deal with composite data types like arrays and objects.

To obviate this problem, PHP provides two functions that can be used to output a variable's value recursively: print_r() and var_dump().

They differ in a few key points:
•  While both functions recursively print out the contents of composite value,
only var_dump() outputs the data types of each value
• Only var_dump() is capable of outputting the value of more than one variable at the same time
• Only print_r can return its output as a string, as opposed to writing it to the script's standard output

Whether echo, var_dump() or print_r should be used in any one given scenario is, clearly, dependent on what you are trying to achieve. 

Generally speaking, echo will cover most of your bases,
while var_dump() and print_r() offer a more specialized set of functionality that works well as an aid in debugging.

-------------------------
(1) illustrate /ˈɪləˌstreɪt/ : to give examples in order to make (something) easier to understand
illustrates; illustrated; illustrating

(2) statement /ˈsteɪtmənt/

(3) expression /ɪkˈsprɛʃən/ : a symbol or a combination of symbols and signs representing a quantity or process

(4) that of : của

(5) exhibit(s) /ɪgˈzɪbət/ : to show or reveal (something)

(6) limitation(s) /ˌlɪməˈteɪʃən/

(7) curb /ˈkɚb/ : to control or limit (something)

(8) certain /ˈsɚtn̩/ : used to refer to something or someone that is not named specifically

(9) debug /diˈbʌg/

(10) composite /ˈkɒmpəzɪt/ : made of different parts or elements

(11) obviate /ˈɑːbviˌeɪt/ : to prevent or avoid (something)

(12)
recursive (a)/riˈkərsiv/  : đệ quy
recursively(adv)

(13) differ /ˈdɪfɚ/ : to be different

(14) capable /ˈkeɪpəbəl/

(15) opposed /əˈpoʊzd/ : completely different

(16) scenario /səˈnɑːriəʊ/

(17) aid /ˈeɪd/ : a device, object, etc., that makes something easier to do
