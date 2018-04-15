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
                name, 
                sessions {
                    city, 
                    year, 
                    begin_session, 
                    end_session, 
                    application_start_date, 
                    application_end_date
                }
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
