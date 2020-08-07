import React from 'react';
import ReactDOM from 'react-dom';
import Board from "./Board";

function Games() {
    return (
        <div className="container">
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <div className="card">
                        <div className="card-header">Game - Rock paper scissors lizard spock</div>

                        <div className="card-body">
                            <p>Select action: </p>

                            <button name="character" value="Lizard">Lizard</button>
                            <button name="character" value="Paper">Paper</button>
                            <button name="character" value="Rock">Rock</button>
                            <button name="character" value="Spock">Spock</button>
                            <button name="character" value="Scissors">Scissors</button>
                        </div>

                        <div>
                            <Board />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default Games;

if (document.getElementById('root')) {
    ReactDOM.render(<Games/>, document.getElementById('root'));
}
