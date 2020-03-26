<div data-entity-id="{{ $id }}">
    <a
        href="{{ route('admin.roles.show', $id) }}"
        class="data-tooltip" data-tooltip="Détails">         
        <i class="fa fa-eye"></i>     
    </a>
    <span style="margin-left:10px"></span>
    <a
        href="{{ route('admin.roles.edit', $id) }}"
        class="data-tooltip" data-tooltip="Modifier">         
        <i class="fa fa-edit"></i>     
    </a>
    <span style="margin-left:10px"></span>
    <a
        href="{{ route('admin.roles.destroy', $id) }}"
        class="data-tooltip delete-btn" data-tooltip="Supprimer">         
        <i class="fa fa-remove"></i>     
    </a>
</div>
