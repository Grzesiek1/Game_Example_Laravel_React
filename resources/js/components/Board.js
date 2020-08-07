import React, {Component} from 'react';

class Board extends Component {

    state = {
        winner: '',
        playerCharacter: '',
        computerCharacter: ''
    }

    componentDidMount() {
       //
    }

    render() {
        return (
            <div id="board">
                Winner: <b>{this.state.winner}</b> <br />
                Player: <b>{this.state.playerCharacter}</b> <br />
                Computer: <b>{this.state.computerCharacter}</b> <br />
            </div>
        );
    }
}

export default Board;
