<div class="panel panel-default">
    <div class="panel-heading">{{__('candidate_panel.operationnal')}}</div>
    <div class="panel-body">

        <div class="row">
            <div class="col-md-3">
                <b>{{__('operationnal.availability_short')}}  </b>
            </div>
            <div class="col-md-3">
                {{$candidate->availability}}
            </div>
        </div>
        <br />
        <div class="row">
            <div class="col-md-3">
                <b>{{__('operationnal.efforts')}}  </b>
            </div>
            <div class="col-md-3">
                {{$candidate->efforts}}
            </div>
        </div>
        <br />

        <div class="row">
            <div class="col-md-3">
                <b>{{__('operationnal.computers')}}  </b>
            </div>
            <div class="col-md-3">
                {{$candidate->computers}}
            </div>
        </div>
        <br />

        <div class="row">
            <div class="col-md-3">
                <b>{{__('operationnal.heard_of')}}  </b>
            </div>
            <div class="col-md-3">
                {{$candidate->heard_of}}
            </div>
        </div>

    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">{{__('candidate_panel.experience')}}</div>
    <div class="panel-body">

        <div class="row">
            <div class="col-md-3">
                <b>{{__('experience.experience_programming')}}  </b>
            </div>
            <div class="col-md-3">
                {{$candidate->experience_programming}}
            </div>
        </div>
        <br />
        <div class="row">
            <div class="col-md-3">
                <b>{{__('experience.course')}}  </b>
            </div>
            <div class="col-md-3">
                {{$candidate->course}}
            </div>
        </div>
        <br />

        <div class="row">
            <div class="col-md-3">
                <b>{{__('experience.english')}}  </b>
            </div>
            <div class="col-md-3">
                {{$candidate->english}}
            </div>
        </div>
        <br />

        <div class="row">
            <div class="col-md-3">
                <b>{{__('experience.today')}}  </b>
            </div>
            <div class="col-md-3">
                {{$candidate->today}}
            </div>
        </div>

    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">{{__('candidate_panel.operationnal')}}</div>
    <div class="panel-body">

        <div class="row">
            <div class="col-md-3">
                <b>{{__('operationnal.availability_short')}}  </b>
            </div>
            <div class="col-md-3">
                {{$candidate->availability}}
            </div>
        </div>
        <br />
        <div class="row">
            <div class="col-md-3">
                <b>{{__('operationnal.efforts')}}  </b>
            </div>
            <div class="col-md-3">
                {{$candidate->efforts}}
            </div>
        </div>
        <br />

        <div class="row">
            <div class="col-md-3">
                <b>{{__('operationnal.computers')}}  </b>
            </div>
            <div class="col-md-3">
                {{$candidate->computers}}
            </div>
        </div>
        <br />

        <div class="row">
            <div class="col-md-3">
                <b>{{__('operationnal.heard_of')}}  </b>
            </div>
            <div class="col-md-3">
                {{$candidate->heard_of}}
            </div>
        </div>

    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">{{__('candidate_panel.coding')}}</div>
    <div class="panel-body">

        <div class="row">
            <div class="col-md-3">
                <b>{{__('coding.coding_short')}}  </b>
            </div>
            <div class="col-md-3">
                {{$candidate->coding}}
            </div>
        </div>
        <br />
        <div class="row">
            <div class="col-md-3">
                <b>{{__('coding.profiles')}}  </b>
            </div>
            <div class="col-md-3">
                {{$candidate->profiles}}
            </div>
        </div>
        <br />

    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">{{__('candidate_panel.projection')}}</div>
    <div class="panel-body">

        <div class="row">
            <div class="col-md-3">
                <b>{{__('projection.hero')}}  </b>
            </div>
            <div class="col-md-3">
                {{$candidate->hero}}
            </div>
            <div class="col-md-6">
                @foreach($candidate->candidate_notes as $note)
                    <p>
                        {{$note->recruiter->last_name}} : {{$note->hero_note}}
                    </p>
                @endforeach
            </div>
        </div>
        <br />
        <div class="row">
            <div class="col-md-3">
                <b>{{__('projection.dev_qualities')}}  </b>
            </div>
            <div class="col-md-3">
                {{$candidate->dev_qualities}}
            </div>
            <div class="col-md-6">
                @foreach($candidate->candidate_notes as $note)
                    <p>
                        {{$note->recruiter->last_name}} : {{$note->dev_qualities_note}}
                    </p>
                @endforeach
            </div>
        </div>
        <br />

        <div class="row">
            <div class="col-md-3">
                <b>{{__('projection.personal_goal')}}  </b>
            </div>
            <div class="col-md-3">
                {{$candidate->personal_goal}}
            </div>
            <div class="col-md-6">
                @foreach($candidate->candidate_notes as $note)
                    <p>
                        {{$note->recruiter->last_name}} : {{$note->personal_goal_note}}
                    </p>
                @endforeach
            </div>
        </div>
        <br />
        <div class="row">
            <div class="col-md-3">
                <b>{{__('projection.dev_point')}}  </b>
            </div>
            <div class="col-md-3">
                {{$candidate->dev_point}}
            </div>
            <div class="col-md-6">
                @foreach($candidate->candidate_notes as $note)
                    <p>
                        {{$note->recruiter->last_name}} : {{$note->dev_point_note}}
                    </p>
                @endforeach
            </div>
        </div>
        <br />

        <div class="row">
            <div class="col-md-3">
                <b>{{__('projection.superpower')}}  </b>
            </div>
            <div class="col-md-3">
                {{$candidate->superpower}}
            </div>
            <div class="col-md-6">
                @foreach($candidate->candidate_notes as $note)
                    <p>
                        {{$note->recruiter->last_name}} : {{$note->superpower_note}}
                    </p>
                @endforeach
            </div>
        </div>
        <br />

    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading">{{__('note.comment')}}</div>
    <div class="panel-body">

        @foreach($candidate->candidate_notes as $note)
            <div class="row">
                <div class="col-md-3">
                    <b>{{$note->recruiter->last_name}}  </b>
                </div>
                <div class="col-md-6">
                    {{$note->comment}}
                </div>
            </div>
        @endforeach
        <br />

    </div>
</div>
<a href="{{ route('candidateFormationEvaluate', [$candidate->id, $formation->id]) }}" class="btn btn-primary">{{__('note.note')}}</a>
</div>