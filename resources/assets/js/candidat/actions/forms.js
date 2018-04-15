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
                id,
                last_name,
                first_name,
                email,
                session {
                    city,
                    year,
                    begin_session,
                    end_session,
                    application_start_date,
                    application_end_date,
                    formation {
                        name,
                        description,
                        questionnaires {
                            title,
                            questions {
                                id,
                                title,
                                type,
                                values,
                                mandatory,
                                goal,
                                weight,
                                answer {
                                    value
                                },
                            },
                        },
                    },
                },
                

            }
        }
    `).then(result => {
        console.log(result)
        store.setQuestionnaires(result.candidat.session.formation.questionnaires)
        //store.setUserFields(fields)
    })
}
