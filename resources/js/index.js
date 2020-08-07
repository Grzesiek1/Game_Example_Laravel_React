import React from "react";
import Game from "./components/Game";

function Index() {
    return (
        <>
            <div className="container">
                <div className="row justify-content-center">
                    <div className="col-md-8">
                        <div className="card">
                            <div className="card-header">Game - Rock paper scissors lizard spock</div>
                            <Game/>
                        </div>
                    </div>
                </div>
            </div>
        </>
    )
}

export default Index;
