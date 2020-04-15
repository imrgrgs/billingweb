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

<li class="{{ Request::is('definePstns*') ? 'active' : '' }}">
    <a href="{{ route('definePstns.index') }}"><i class="fa fa-edit"></i><span>@lang('models/definePstns.plural')</span></a>
</li>

<li class="{{ Request::is('discadoxVoips*') ? 'active' : '' }}">
    <a href="{{ route('discadoxVoips.index') }}"><i class="fa fa-edit"></i><span>@lang('models/discadoxVoips.plural')</span></a>
</li>

<li class="{{ Request::is('envioSms*') ? 'active' : '' }}">
    <a href="{{ route('envioSms.index') }}"><i class="fa fa-edit"></i><span>@lang('models/envioSms.plural')</span></a>
</li>

<li class="{{ Request::is('estatisticas*') ? 'active' : '' }}">
    <a href="{{ route('estatisticas.index') }}"><i class="fa fa-edit"></i><span>@lang('models/estatisticas.plural')</span></a>
</li>

<li class="{{ Request::is('extensionTables*') ? 'active' : '' }}">
    <a href="{{ route('extensionTables.index') }}"><i class="fa fa-edit"></i><span>@lang('models/extensionTables.plural')</span></a>
</li>

<li class="{{ Request::is('faxVirtuals*') ? 'active' : '' }}">
    <a href="{{ route('faxVirtuals.index') }}"><i class="fa fa-edit"></i><span>@lang('models/faxVirtuals.plural')</span></a>
</li>

<li class="{{ Request::is('faxVirtualParams*') ? 'active' : '' }}">
    <a href="{{ route('faxVirtualParams.index') }}"><i class="fa fa-edit"></i><span>@lang('models/faxVirtualParams.plural')</span></a>
</li>

<li class="{{ Request::is('firewalls*') ? 'active' : '' }}">
    <a href="{{ route('firewalls.index') }}"><i class="fa fa-edit"></i><span>@lang('models/firewalls.plural')</span></a>
</li>

<li class="{{ Request::is('fonesAnatels*') ? 'active' : '' }}">
    <a href="{{ route('fonesAnatels.index') }}"><i class="fa fa-edit"></i><span>@lang('models/fonesAnatels.plural')</span></a>
</li>

<li class="{{ Request::is('fonesBloqs*') ? 'active' : '' }}">
    <a href="{{ route('fonesBloqs.index') }}"><i class="fa fa-edit"></i><span>@lang('models/fonesBloqs.plural')</span></a>
</li>

<li class="{{ Request::is('fonesProcons*') ? 'active' : '' }}">
    <a href="{{ route('fonesProcons.index') }}"><i class="fa fa-edit"></i><span>@lang('models/fonesProcons.plural')</span></a>
</li>

<li class="{{ Request::is('fonesRestricaos*') ? 'active' : '' }}">
    <a href="{{ route('fonesRestricaos.index') }}"><i class="fa fa-edit"></i><span>@lang('models/fonesRestricaos.plural')</span></a>
</li>

<li class="{{ Request::is('fonesUsers*') ? 'active' : '' }}">
    <a href="{{ route('fonesUsers.index') }}"><i class="fa fa-edit"></i><span>@lang('models/fonesUsers.plural')</span></a>
</li>

<li class="{{ Request::is('fornecedors*') ? 'active' : '' }}">
    <a href="{{ route('fornecedors.index') }}"><i class="fa fa-edit"></i><span>@lang('models/fornecedors.plural')</span></a>
</li>

<li class="{{ Request::is('grupos*') ? 'active' : '' }}">
    <a href="{{ route('grupos.index') }}"><i class="fa fa-edit"></i><span>@lang('models/grupos.plural')</span></a>
</li>

<li class="{{ Request::is('grupoSms*') ? 'active' : '' }}">
    <a href="{{ route('grupoSms.index') }}"><i class="fa fa-edit"></i><span>@lang('models/grupoSms.plural')</span></a>
</li>

<li class="{{ Request::is('grupoVoips*') ? 'active' : '' }}">
    <a href="{{ route('grupoVoips.index') }}"><i class="fa fa-edit"></i><span>@lang('models/grupoVoips.plural')</span></a>
</li>

<li class="{{ Request::is('grupoVoipRamals*') ? 'active' : '' }}">
    <a href="{{ route('grupoVoipRamals.index') }}"><i class="fa fa-edit"></i><span>@lang('models/grupoVoipRamals.plural')</span></a>
</li>

<li class="{{ Request::is('grupoUras*') ? 'active' : '' }}">
    <a href="{{ route('grupoUras.index') }}"><i class="fa fa-edit"></i><span>@lang('models/grupoUras.plural')</span></a>
</li>

<li class="{{ Request::is('grupoUraDesvios*') ? 'active' : '' }}">
    <a href="{{ route('grupoUraDesvios.index') }}"><i class="fa fa-edit"></i><span>@lang('models/grupoUraDesvios.plural')</span></a>
</li>

<li class="{{ Request::is('gvts*') ? 'active' : '' }}">
    <a href="{{ route('gvts.index') }}"><i class="fa fa-edit"></i><span>@lang('models/gvts.plural')</span></a>
</li>

<li class="{{ Request::is('ligacaos*') ? 'active' : '' }}">
    <a href="{{ route('ligacaos.index') }}"><i class="fa fa-edit"></i><span>@lang('models/ligacaos.plural')</span></a>
</li>

<li class="{{ Request::is('ligOnlines*') ? 'active' : '' }}">
    <a href="{{ route('ligOnlines.index') }}"><i class="fa fa-edit"></i><span>@lang('models/ligOnlines.plural')</span></a>
</li>

<li class="{{ Request::is('logChamadas*') ? 'active' : '' }}">
    <a href="{{ route('logChamadas.index') }}"><i class="fa fa-edit"></i><span>@lang('models/logChamadas.plural')</span></a>
</li>

<li class="{{ Request::is('logTarifacaos*') ? 'active' : '' }}">
    <a href="{{ route('logTarifacaos.index') }}"><i class="fa fa-edit"></i><span>@lang('models/logTarifacaos.plural')</span></a>
</li>

<li class="{{ Request::is('naoTarifadoTerms*') ? 'active' : '' }}">
    <a href="{{ route('naoTarifadoTerms.index') }}"><i class="fa fa-edit"></i><span>@lang('models/naoTarifadoTerms.plural')</span></a>
</li>

<li class="{{ Request::is('operadoras*') ? 'active' : '' }}">
    <a href="{{ route('operadoras.index') }}"><i class="fa fa-edit"></i><span>@lang('models/operadoras.plural')</span></a>
</li>

<li class="{{ Request::is('ordemTerminacaoIas*') ? 'active' : '' }}">
    <a href="{{ route('ordemTerminacaoIas.index') }}"><i class="fa fa-edit"></i><span>@lang('models/ordemTerminacaoIas.plural')</span></a>
</li>

<li class="{{ Request::is('parBoletos*') ? 'active' : '' }}">
    <a href="{{ route('parBoletos.index') }}"><i class="fa fa-edit"></i><span>@lang('models/parBoletos.plural')</span></a>
</li>

<li class="{{ Request::is('parBoletoRevs*') ? 'active' : '' }}">
    <a href="{{ route('parBoletoRevs.index') }}"><i class="fa fa-edit"></i><span>@lang('models/parBoletoRevs.plural')</span></a>
</li>

<li class="{{ Request::is('parRevendas*') ? 'active' : '' }}">
    <a href="{{ route('parRevendas.index') }}"><i class="fa fa-edit"></i><span>@lang('models/parRevendas.plural')</span></a>
</li>

<li class="{{ Request::is('pins*') ? 'active' : '' }}">
    <a href="{{ route('pins.index') }}"><i class="fa fa-edit"></i><span>@lang('models/pins.plural')</span></a>
</li>

<li class="{{ Request::is('planos*') ? 'active' : '' }}">
    <a href="{{ route('planos.index') }}"><i class="fa fa-edit"></i><span>@lang('models/planos.plural')</span></a>
</li>

<li class="{{ Request::is('popsReveAssis*') ? 'active' : '' }}">
    <a href="{{ route('popsReveAssis.index') }}"><i class="fa fa-edit"></i><span>@lang('models/popsReveAssis.plural')</span></a>
</li>

<li class="{{ Request::is('posPagos*') ? 'active' : '' }}">
    <a href="{{ route('posPagos.index') }}"><i class="fa fa-edit"></i><span>@lang('models/posPagos.plural')</span></a>
</li>

<li class="{{ Request::is('programas*') ? 'active' : '' }}">
    <a href="{{ route('programas.index') }}"><i class="fa fa-edit"></i><span>@lang('models/programas.plural')</span></a>
</li>

<li class="{{ Request::is('provedorSms*') ? 'active' : '' }}">
    <a href="{{ route('provedorSms.index') }}"><i class="fa fa-edit"></i><span>@lang('models/provedorSms.plural')</span></a>
</li>

<li class="{{ Request::is('publicFones*') ? 'active' : '' }}">
    <a href="{{ route('publicFones.index') }}"><i class="fa fa-edit"></i><span>@lang('models/publicFones.plural')</span></a>
</li>

<li class="{{ Request::is('publicidades*') ? 'active' : '' }}">
    <a href="{{ route('publicidades.index') }}"><i class="fa fa-edit"></i><span>@lang('models/publicidades.plural')</span></a>
</li>

<li class="{{ Request::is('publicidadeAudios*') ? 'active' : '' }}">
    <a href="{{ route('publicidadeAudios.index') }}"><i class="fa fa-edit"></i><span>@lang('models/publicidadeAudios.plural')</span></a>
</li>

<li class="{{ Request::is('publicidadeParams*') ? 'active' : '' }}">
    <a href="{{ route('publicidadeParams.index') }}"><i class="fa fa-edit"></i><span>@lang('models/publicidadeParams.plural')</span></a>
</li>

<li class="{{ Request::is('relacaos*') ? 'active' : '' }}">
    <a href="{{ route('relacaos.index') }}"><i class="fa fa-edit"></i><span>@lang('models/relacaos.plural')</span></a>
</li>

<li class="{{ Request::is('representantes*') ? 'active' : '' }}">
    <a href="{{ route('representantes.index') }}"><i class="fa fa-edit"></i><span>@lang('models/representantes.plural')</span></a>
</li>

<li class="{{ Request::is('saldoGerals*') ? 'active' : '' }}">
    <a href="{{ route('saldoGerals.index') }}"><i class="fa fa-edit"></i><span>@lang('models/saldoGerals.plural')</span></a>
</li>

<li class="{{ Request::is('servers*') ? 'active' : '' }}">
    <a href="{{ route('servers.index') }}"><i class="fa fa-edit"></i><span>@lang('models/servers.plural')</span></a>
</li>

<li class="{{ Request::is('sipBuddies*') ? 'active' : '' }}">
    <a href="{{ route('sipBuddies.index') }}"><i class="fa fa-edit"></i><span>@lang('models/sipBuddies.plural')</span></a>
</li>

<li class="{{ Request::is('smsCampanhas*') ? 'active' : '' }}">
    <a href="{{ route('smsCampanhas.index') }}"><i class="fa fa-edit"></i><span>@lang('models/smsCampanhas.plural')</span></a>
</li>

<li class="{{ Request::is('smsCampanhaFones*') ? 'active' : '' }}">
    <a href="{{ route('smsCampanhaFones.index') }}"><i class="fa fa-edit"></i><span>@lang('models/smsCampanhaFones.plural')</span></a>
</li>

<li class="{{ Request::is('tabAssinantes*') ? 'active' : '' }}">
    <a href="{{ route('tabAssinantes.index') }}"><i class="fa fa-edit"></i><span>@lang('models/tabAssinantes.plural')</span></a>
</li>

<li class="{{ Request::is('tabelaReps*') ? 'active' : '' }}">
    <a href="{{ route('tabelaReps.index') }}"><i class="fa fa-edit"></i><span>@lang('models/tabelaReps.plural')</span></a>
</li>

<li class="{{ Request::is('tabEspAs*') ? 'active' : '' }}">
    <a href="{{ route('tabEspAs.index') }}"><i class="fa fa-edit"></i><span>@lang('models/tabEspAs.plural')</span></a>
</li>

<li class="{{ Request::is('tabEsps*') ? 'active' : '' }}">
    <a href="{{ route('tabEsps.index') }}"><i class="fa fa-edit"></i><span>@lang('models/tabEsps.plural')</span></a>
</li>

<li class="{{ Request::is('tabRevendas*') ? 'active' : '' }}">
    <a href="{{ route('tabRevendas.index') }}"><i class="fa fa-edit"></i><span>@lang('models/tabRevendas.plural')</span></a>
</li>

<li class="{{ Request::is('tarifas*') ? 'active' : '' }}">
    <a href="{{ route('tarifas.index') }}"><i class="fa fa-edit"></i><span>@lang('models/tarifas.plural')</span></a>
</li>

<li class="{{ Request::is('taxas*') ? 'active' : '' }}">
    <a href="{{ route('taxas.index') }}"><i class="fa fa-edit"></i><span>@lang('models/taxas.plural')</span></a>
</li>

<li class="{{ Request::is('terminacaos*') ? 'active' : '' }}">
    <a href="{{ route('terminacaos.index') }}"><i class="fa fa-edit"></i><span>@lang('models/terminacaos.plural')</span></a>
</li>

<li class="{{ Request::is('tpMenus*') ? 'active' : '' }}">
    <a href="{{ route('tpMenus.index') }}"><i class="fa fa-edit"></i><span>@lang('models/tpMenus.plural')</span></a>
</li>

<li class="{{ Request::is('assinantes*') ? 'active' : '' }}">
    <a href="{{ route('assinantes.index') }}"><i class="fa fa-edit"></i><span>@lang('models/assinantes.plural')</span></a>
</li>

<li class="{{ Request::is('assinanteCancels*') ? 'active' : '' }}">
    <a href="{{ route('assinanteCancels.index') }}"><i class="fa fa-edit"></i><span>@lang('models/assinanteCancels.plural')</span></a>
</li>

<li class="{{ Request::is('assinanteCancelados*') ? 'active' : '' }}">
    <a href="{{ route('assinanteCancelados.index') }}"><i class="fa fa-edit"></i><span>@lang('models/assinanteCancelados.plural')</span></a>
</li>

<li class="{{ Request::is('voipToVoips*') ? 'active' : '' }}">
    <a href="{{ route('voipToVoips.index') }}"><i class="fa fa-edit"></i><span>@lang('models/voipToVoips.plural')</span></a>
</li>

