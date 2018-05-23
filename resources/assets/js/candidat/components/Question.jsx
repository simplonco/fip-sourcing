import React, {Component} from 'react'
import {debounce} from 'lodash'
export default class Question extends Component {
    constructor() {
        super()
        this.update = debounce(this.update.bind(this),1500)
    }

    update() {
        const data = {q:this.props.q.id, value:this.input.value};
        axios.put('/candidate/answer/update', data)
            .then((res)=>{
                console.log(res)
            })
    }

    render() {
        const {q} = this.props
        const classes = {input:"form-control"}
        let input;

        if (q.type === 'textarea') {
            input = <textarea ref={(ref) => {
                this.input = ref
            }} name={q.id} defaultValue={q.answer && q.answer.value} onChange={this.update} className={classes.input}/>
        } else if (q.type === 'select') {
            const arr = ['Aucune',...JSON.parse(q.values)];
            const options = arr.map((opt, pos) => {
                return <option key={pos} value={opt}>{opt}</option>
            })
            input = <select ref={(ref) => {
                this.input = ref
            }} name={q.id} defaultValue={q.answer && q.answer.value} onChange={this.update}
                            className={classes.input}>{options}</select>
        } else {
            input = <input ref={(ref)=>{this.input = ref}} type={q.type} name={q.id} defaultValue={q.answer && q.answer.value} onChange={this.update} className={classes.input} />
        }
        return (
        <div className={'form-group'} >
            <button onClick={()=>{console.log(q)}}>log</button>
            <label dangerouslySetInnerHTML={{__html:q.title}} />
            {input}
            <p>{q.goal}</p>
        </div>
        )
    }

}