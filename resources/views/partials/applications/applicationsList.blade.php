<div class="table-responsive">
   
<table class="table table-striped table-condensed">
      <thead>
      <tr>
          <th><input type="checkbox"></th>
          <th class="sorting-arrows">
             {{__('user.choose_user.last_name')}} 
            <div>
                {{-- <a href="{{ route('recruiterFormationCandidatesList', [$session->formation->id, 'last_name', 'asc']) }}"><i class="fa fa-sort-up" aria-hidden="true"></i></a> --}}
                {{-- <a href="{{ route('recruiterFormationCandidatesList', [$session->formation->id, 'last_name', 'desc']) }}"><i class="fa fa-sort-down" aria-hidden="true"></i></a> --}}
            </div>
         </th>
          <th>{{__('user.choose_user.first_name')}}</th>
          <th style="text-align:center;">Progression</th>
          <th style="text-align:center;">{{__('game.badges')}}</th>
          <th style="text-align:center;">{{__('user.choose_user.score')}}</th>
          <th style="text-align:center;">Nb d'évaluation</th>
          <th style="text-align:center;">Evalué</th>
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
              <td><a href="{{ route('trainer.sessions.applicants.index', [$candidate->id, $session->formation->id]) }}">{{$candidate->last_name}}</a></td>
              <td>{{$candidate->first_name}}</td>
              <td style="text-align:center;">{{$candidate->get_progress()}}{{-- pas sur car résultat en pourcentage attendu,à modifier--}}</td>
              <td style="text-align:center;">{{--badges à ajouter--}}</td>
              <td style="text-align:center;">{{get_score($candidate)}}</td>
              <td style="text-align:center;">{{$candidate->candidate_notes()->count()}}</td>
              <td style="text-align:center;">{{rand(0,1)===0 ? "Non" : "Oui"}}</td>
          </tr>
      @endforeach

      {{ $candidates->links() }}
      </tbody>
  </table>
</div>
