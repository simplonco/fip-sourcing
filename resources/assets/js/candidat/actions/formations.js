import store from '../stores/FormationsStore'
import loading from '../stores/LoadingStore'
import { Lokka } from 'lokka'
import { Transport } from 'lokka-transport-http'
import {Get as getForms} from './forms'

const client = new Lokka({
    transport: new Transport('/graphql')
})

export function Get () {
    loading.set(true)
    client.query(`
        {
            formations {
                id,
                name, 
                selected,
                sessions {
                    id,
                    city, 
                    year, 
                    start_date, 
                    end_date, 
                    application_start_date, 
                    application_end_date,
                    selected
                }
            }
        }
    `).then(result => {
        console.log(result)
        store.set(result.formations)
        const count = result.formations.filter((formation)=>{
            return formation.selected;
        }).map(f=>(1)).reduce((prev, curr) => {
            return prev+curr;
        }, 0)
        if(count >0) {
            store.selectFormation(result.formations.filter((formation)=>{
                return formation.selected;
            }).map(f=>(f.id)).reduce((prev, curr) => {
                return curr;
            }))
            getForms();
        }
        loading.set(false)
    })
}


export function selectFormation (formation) {
    store.selectFormation(formation)
}

export function selectSession(sessionID){
    console.log("we got a session !", sessionID)
    store.setReady(false)
    loading.set(true)
    axios.put('/candidate/session', {id: sessionID})
        .then(()=>{
            loading.set(false)
            Get()
        })
}