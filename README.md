# pirate-game

Implement the engine of the pirate game:

> - the most senior pirate proposes a distribution of golds

> - all the pirates cast their votes on the distribution

> - if the majority says no, then the most senior pirate gets killed and the game repeats among the other pirates.

> - if the majority says yes, then the proposal is accepted and the golds disbursed per the proposal.

> - in case of a tie, the most senior pirate has the casting vote.

> - the game ends until a pirate is left or a proposal is accepted.

Clue 1: input: number of pirates and number of gold pieces. pirate #(x+1) is a senior to pirate #(x)

Clue 2: the first clue: you may want to start with a random voter and distributors
