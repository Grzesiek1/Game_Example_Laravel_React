import React, {Component} from 'react';

class Board extends Component {

    render() {
        if (this.props.status === 'result') {
            return (
                <div id="board">
                    Winner: <b>{this.props.winner}</b> <br/>
                    Player: <b>{this.props.playerCharacter}</b> <br/>
                    Computer: <b>{this.props.computerCharacter}</b> <br/>
                </div>
            );
        } else {
            return (
                <div id="board">
                    {this.props.status}
                </div>);
        }
    }
}

export default Board;
