import React, {Component} from 'react'
import Question from "./Question";

export default class Questionnaire extends Component {
    constructor() {
        super()
    }

    componentWillMount() {

    }

    render() {
        console.log(this.props.data)
        const q = this.props.data
        let questions = q.questions.map((question)=>{
            return <Question q={question}/>
        })

        return (
            <div>
                <h3>{q.title}</h3>
                {questions}
            </div>
        )
    }

}