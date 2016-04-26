var computerChoice = function ()
{
    var r = Math.random();
    if (r < 0.34) {
    	return "rock";
    } else if(r <= 0.67) {
    	return "paper";
    } else {
    	return "scissors";
    }
};

var compare = function ( choice1, choice2 ) {
    if ( choice1 === choice2 )
        return "The result is a tie!";
    else if ( choice1 === "rock") {
        if ( choice2 == "scissors")
            return "rock wins";
        else
            return "paper wins";
    } else if ( choice1 === "paper") {
        if ( choice2 == "scissors")
            return "scissors wins";
        else
            return "paper wins";
    } else if ( choice1 === "scissors") {
        if ( choice2 == "rock")
            return "rock wins";
        else
            return "scissors wins";
    }
}
