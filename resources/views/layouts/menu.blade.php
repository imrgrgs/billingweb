<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{{ route('users.index') }}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>

<li class="{{ Request::is('projects*') ? 'active' : '' }}">
    <a href="{{ route('projects.index') }}"><i class="fa fa-edit"></i><span>@lang('models/projects.plural')</span></a>
</li>

<li class="{{ Request::is('meetings*') ? 'active' : '' }}">
    <a href="{{ route('meetings.index') }}"><i class="fa fa-edit"></i><span>@lang('models/meetings.plural')</span></a>
</li>

<li class="{{ Request::is('requirements*') ? 'active' : '' }}">
    <a href="{{ route('requirements.index') }}"><i class="fa fa-edit"></i><span>@lang('models/requirements.plural')</span></a>
</li>

<li class="{{ Request::is('actors*') ? 'active' : '' }}">
    <a href="{{ route('actors.index') }}"><i class="fa fa-edit"></i><span>@lang('models/actors.plural')</span></a>
</li>

<li class="{{ Request::is('entities*') ? 'active' : '' }}">
    <a href="{{ route('entities.index') }}"><i class="fa fa-edit"></i><span>@lang('models/entities.plural')</span></a>
</li>

<li class="{{ Request::is('entityStructures*') ? 'active' : '' }}">
    <a href="{{ route('entityStructures.index') }}"><i class="fa fa-edit"></i><span>@lang('models/entityStructures.plural')</span></a>
</li>

<li class="{{ Request::is('usuarios*') ? 'active' : '' }}">
    <a href="{{ route('usuarios.index') }}"><i class="fa fa-edit"></i><span>@lang('models/usuarios.plural')</span></a>
</li>

<li class="{{ Request::is('acessos*') ? 'active' : '' }}">
    <a href="{{ route('acessos.index') }}"><i class="fa fa-edit"></i><span>@lang('models/acessos.plural')</span></a>
</li>

<li class="{{ Request::is('actives*') ? 'active' : '' }}">
    <a href="{{ route('actives.index') }}"><i class="fa fa-edit"></i><span>@lang('models/actives.plural')</span></a>
</li>

<li class="{{ Request::is('adesaos*') ? 'active' : '' }}">
    <a href="{{ route('adesaos.index') }}"><i class="fa fa-edit"></i><span>@lang('models/adesaos.plural')</span></a>
</li>

<li class="{{ Request::is('admins*') ? 'active' : '' }}">
    <a href="{{ route('admins.index') }}"><i class="fa fa-edit"></i><span>@lang('models/admins.plural')</span></a>
</li>

<li class="{{ Request::is('agentes*') ? 'active' : '' }}">
    <a href="{{ route('agentes.index') }}"><i class="fa fa-edit"></i><span>@lang('models/agentes.plural')</span></a>
</li>

<li class="{{ Request::is('agentexUsers*') ? 'active' : '' }}">
    <a href="{{ route('agentexUsers.index') }}"><i class="fa fa-edit"></i><span>@lang('models/agentexUsers.plural')</span></a>
</li>

<li class="{{ Request::is('anuncios*') ? 'active' : '' }}">
    <a href="{{ route('anuncios.index') }}"><i class="fa fa-edit"></i><span>@lang('models/anuncios.plural')</span></a>
</li>

<li class="{{ Request::is('aparelhos*') ? 'active' : '' }}">
    <a href="{{ route('aparelhos.index') }}"><i class="fa fa-edit"></i><span>@lang('models/aparelhos.plural')</span></a>
</li>

<li class="{{ Request::is('ataques*') ? 'active' : '' }}">
    <a href="{{ route('ataques.index') }}"><i class="fa fa-edit"></i><span>@lang('models/ataques.plural')</span></a>
</li>

<li class="{{ Request::is('audio*') ? 'active' : '' }}">
    <a href="{{ route('audio.index') }}"><i class="fa fa-edit"></i><span>@lang('models/audio.plural')</span></a>
</li>

<li class="{{ Request::is('bvaudios*') ? 'active' : '' }}">
    <a href="{{ route('bvaudios.index') }}"><i class="fa fa-edit"></i><span>@lang('models/bvaudios.plural')</span></a>
</li>

<li class="{{ Request::is('cabines*') ? 'active' : '' }}">
    <a href="{{ route('cabines.index') }}"><i class="fa fa-edit"></i><span>@lang('models/cabines.plural')</span></a>
</li>

<li class="{{ Request::is('cacs*') ? 'active' : '' }}">
    <a href="{{ route('cacs.index') }}"><i class="fa fa-edit"></i><span>@lang('models/cacs.plural')</span></a>
</li>

<li class="{{ Request::is('cacRevendas*') ? 'active' : '' }}">
    <a href="{{ route('cacRevendas.index') }}"><i class="fa fa-edit"></i><span>@lang('models/cacRevendas.plural')</span></a>
</li>

<li class="{{ Request::is('cadFeriados*') ? 'active' : '' }}">
    <a href="{{ route('cadFeriados.index') }}"><i class="fa fa-edit"></i><span>@lang('models/cadFeriados.plural')</span></a>
</li>

<li class="{{ Request::is('cdrs*') ? 'active' : '' }}">
    <a href="{{ route('cdrs.index') }}"><i class="fa fa-edit"></i><span>@lang('models/cdrs.plural')</span></a>
</li>

<li class="{{ Request::is('celularSms*') ? 'active' : '' }}">
    <a href="{{ route('celularSms.index') }}"><i class="fa fa-edit"></i><span>@lang('models/celularSms.plural')</span></a>
</li>

<li class="{{ Request::is('consumos*') ? 'active' : '' }}">
    <a href="{{ route('consumos.index') }}"><i class="fa fa-edit"></i><span>@lang('models/consumos.plural')</span></a>
</li>

<li class="{{ Request::is('contaCorrentes*') ? 'active' : '' }}">
    <a href="{{ route('contaCorrentes.index') }}"><i class="fa fa-edit"></i><span>@lang('models/contaCorrentes.plural')</span></a>
</li>

<li class="{{ Request::is('contratacaos*') ? 'active' : '' }}">
    <a href="{{ route('contratacaos.index') }}"><i class="fa fa-edit"></i><span>@lang('models/contratacaos.plural')</span></a>
</li>

<li class="{{ Request::is('contratos*') ? 'active' : '' }}">
    <a href="{{ route('contratos.index') }}"><i class="fa fa-edit"></i><span>@lang('models/contratos.plural')</span></a>
</li>

<li class="{{ Request::is('cpaAgentes*') ? 'active' : '' }}">
    <a href="{{ route('cpaAgentes.index') }}"><i class="fa fa-edit"></i><span>@lang('models/cpaAgentes.plural')</span></a>
</li>

<li class="{{ Request::is('cpaMasters*') ? 'active' : '' }}">
    <a href="{{ route('cpaMasters.index') }}"><i class="fa fa-edit"></i><span>@lang('models/cpaMasters.plural')</span></a>
</li>

<li class="{{ Request::is('cpaRevendas*') ? 'active' : '' }}">
    <a href="{{ route('cpaRevendas.index') }}"><i class="fa fa-edit"></i><span>@lang('models/cpaRevendas.plural')</span></a>
</li>

<li class="{{ Request::is('cprasTermins*') ? 'active' : '' }}">
    <a href="{{ route('cprasTermins.index') }}"><i class="fa fa-edit"></i><span>@lang('models/cprasTermins.plural')</span></a>
</li>

<li class="{{ Request::is('crecAgentes*') ? 'active' : '' }}">
    <a href="{{ route('crecAgentes.index') }}"><i class="fa fa-edit"></i><span>@lang('models/crecAgentes.plural')</span></a>
</li>

<li class="{{ Request::is('crececebers*') ? 'active' : '' }}">
    <a href="{{ route('crececebers.index') }}"><i class="fa fa-edit"></i><span>@lang('models/crececebers.plural')</span></a>
</li>

<li class="{{ Request::is('crecMasters*') ? 'active' : '' }}">
    <a href="{{ route('crecMasters.index') }}"><i class="fa fa-edit"></i><span>@lang('models/crecMasters.plural')</span></a>
</li>

<li class="{{ Request::is('crecRevendas*') ? 'active' : '' }}">
    <a href="{{ route('crecRevendas.index') }}"><i class="fa fa-edit"></i><span>@lang('models/crecRevendas.plural')</span></a>
</li>

<li class="{{ Request::is('creditos*') ? 'active' : '' }}">
    <a href="{{ route('creditos.index') }}"><i class="fa fa-edit"></i><span>@lang('models/creditos.plural')</span></a>
</li>

<li class="{{ Request::is('credito0800Cartaos*') ? 'active' : '' }}">
    <a href="{{ route('credito0800Cartaos.index') }}"><i class="fa fa-edit"></i><span>@lang('models/credito0800Cartaos.plural')</span></a>
</li>

<li class="{{ Request::is('credito4003s*') ? 'active' : '' }}">
    <a href="{{ route('credito4003s.index') }}"><i class="fa fa-edit"></i><span>@lang('models/credito4003s.plural')</span></a>
</li>

<li class="{{ Request::is('creditoAdms*') ? 'active' : '' }}">
    <a href="{{ route('creditoAdms.index') }}"><i class="fa fa-edit"></i><span>@lang('models/creditoAdms.plural')</span></a>
</li>

<li class="{{ Request::is('custoTerms*') ? 'active' : '' }}">
    <a href="{{ route('custoTerms.index') }}"><i class="fa fa-edit"></i><span>@lang('models/custoTerms.plural')</span></a>
</li>

