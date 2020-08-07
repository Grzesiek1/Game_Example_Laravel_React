import React, {Component} from 'react';
import axios from "axios";
import Board from "./Board";

class Game extends Component {

    state = {
        winner: '',
        playerCharacter: '',
        computerCharacter: '',
        status: ' '
    }

    onClick(event) {
        let {value} = event.target;
        this.setState({status: 'loading...'});

        axios({
            method: `post`,
            url: `./api/game`,
            data: {character: value}
        })
            .then(response => {
                this.setState(response.data);
            })
            .catch(error => {
                console.log(error);
            })
    };

    render() {
        return (
            <>
                <div className="card-body">
                    <p>Select action: </p>
                    <button onClick={this.onClick.bind(this)} value="1">Rock</button>
                    <button onClick={this.onClick.bind(this)} value="2">Paper</button>
                    <button onClick={this.onClick.bind(this)} value="3">Scissors</button>
                    <button onClick={this.onClick.bind(this)} value="4">Lizard</button>
                    <button onClick={this.onClick.bind(this)} value="5">Spock</button>
                </div>

                <Board {...this.state} />
            </>
        );
    }
}

export default Game;
