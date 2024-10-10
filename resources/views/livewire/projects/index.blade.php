<div>
       COMPONENTE LIVEWIRE INDEX
       @if($projects->isEmpty())
           <p>Nenhum projeto encontrado.</p>
       @else
           @foreach($projects as $project)
               <li>
                   <a href="{{ route('projects.show', $project) }}">
                       {{ $project->tech_stack }}
                   </a>
               </li>
           @endforeach
       @endif
   </div>