<table class="table table-striped">
      <thead>
      <tr>
          <th><input type="checkbox"></th>
          <th class="sorting-arrows">
             {{__('user.choose_user.last_name')}}
              <a href="{{ route('recruiterFormationCandidatesList', [$session->formation->id, 'last_name', 'asc']) }}"><i class="fa fa-sort-up" aria-hidden="true"></i></a>
              <a href="{{ route('recruiterFormationCandidatesList', [$session->formation->id, 'last_name', 'desc']) }}"><i class="fa fa-sort-down" aria-hidden="true"></i></a>
          </th>
          <th>{{__('user.choose_user.first_name')}}</th>
          <th>Progression</th>
          <th>{{__('game.badges')}}</th>
          <th>{{__('user.choose_user.score')}}</th>
          <th>Nb d'évaluation</th>
          <th>Evalué</th>
      </tr>
      </thead>
      <tbody>
      @foreach ($candidates as $candidate)
          <tr>
              <td>
                  <form action="">
                      <input type="checkbox">
                  </form>
              </td>
              <td><a href="{{ route('candidateFormationShow', [$candidate->id, $session->formation->id]) }}">{{$candidate->last_name}}</a></td>
              <td>{{$candidate->first_name}}</td>
              <td>{{$candidate->get_progress()}}{{-- pas sur car résultat en pourcentage attendu,à modifier--}}</td>
              <td>{{--badges à ajouter--}}</td>
              <td>{{get_score($candidate)}}</td>
              <td>{{$candidate->candidate_notes()->count()}}</td>
              <td>{{--evalué : oui ou non--}}</td>
          </tr>
      @endforeach
      {{ $candidates->links() }}
      </tbody>
  </table>