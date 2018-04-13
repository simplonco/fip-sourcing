import store from '../stores/FormsStore'
import { Lokka } from 'lokka'
import { Transport } from 'lokka-transport-http'

const client = new Lokka({
    transport: new Transport('/graphql')
})
export function Get () {
    client.query(`
        {
            candidat {
                last_name,
                first_name,
                availability,
                efforts,
                computers,
                heard_of,
                nationality,
                birth_date,
                gender,
                phone,
                postal_code,
                city,
                address,
                status,
                number_pole_emploi,
                pole_emploi,
                number_social_security,
                obtained_diploma,
                cdd,
                experience_programming,
                course,
                english,
                today,
                coding,
                profiles,
                hero,
                dev_qualities,
                personal_goal,
                dev_point,
                superpower,
                html_score,
                css_score,
                js_score,
                php_score,
                score,
                application_sent,
            }
        }
    `).then(result => {
        console.log(result)
        let fields = [];
        for(const key in result.candidat) {
            fields.push({key,value:result.candidat[key]})
        }
        window.fields = fields
        console.log(typeof fields)
        store.setUserFields(fields)
    })
}
