{extends file="common.tpl"}
{block name="content"}
    {include file="common_elements/navigation/employeeModuleNav.tpl"}

    <div id="featured">

        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Lista wizyt</h4>
            </div>

            <div class="panel-body">
                <table class="table table-hover" align="center">
                    <thead>
                    <tr>
                        <th>Pesel pacjenta</th>
                        <th>Pesel lekarza</th>
                        <th>Data wizyty</th>
                        <th>Godzina wizyty</th>
                        <th>Cel</th>
                        <th>Akcja</th>
                    </tr>
                    </thead>
                    <tbody>
                    {foreach $appointments as $apt}
                        <tr>
                            <td>{$apt["pesel_employee"]}</td>
                            <td>{$apt["pesel_patient"]}</td>
                            <td>{$apt["date"]}</td>
                            <td>{$apt["time"]}</td>
                            <td>{$apt["purpose"]}</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-default dropdown-toggle"
                                            type="button" id="actionDrop"
                                            data-toggle="dropdown"
                                            aria-haspopup="true"
                                            aria-expanded="true">
                                        Rozwiń
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="actionDrop">
                                        <li><a class="glyphicon glyphicon-pencil" aria-hidden="true" onclick="location.href='{$conf->action_url}editAppointment/{$apt['id']}';" >Edytuj</a></li>
                                        <li><a class="glyphicon glyphicon-trash" aria-hidden="true"onclick="location.href='{$conf->action_url}deleteAppointment/{$apt['id']}';">Usuń</a></li>
                                    </ul>
                                </div>
                            </td>

                        </tr>
                    {/foreach}
                </table>
            </div>

            <div class="panel-footer">
                <button type="button" class="button btn-lg" onclick="location.href='{$conf->action_root}generateAddAppointmentForm';">Dodaj wizytę</button>
            </div>
        </div>

    </div>
{/block}
