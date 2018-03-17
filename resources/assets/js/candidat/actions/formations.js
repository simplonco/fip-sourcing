import store from '../stores/FormationsStore'
import { Lokka } from 'lokka'
import { Transport } from 'lokka-transport-http'

const client = new Lokka({
    transport: new Transport('/graphql')
})
export function Get () {
    client.query(`
        {
                formations {
                    id, name, city, year
                }
        }
    `).then(result => {
        console.log(result)
        store.set(result.formations)
    })
}

export function Select(formation) {
    store.select(formation)
}

export function Dummy () {
    setTimeout(()=>{
        store.setDummy('Hey !')
    },2000)
}