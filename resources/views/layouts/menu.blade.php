<li class="nav-item">
    <a href="{{ route('ships.index') }}"
       class="nav-link {{ Request::is('ships*') ? 'active' : '' }}">
        <p>Ships</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('crewMembers.index') }}"
       class="nav-link {{ Request::is('crewMembers*') ? 'active' : '' }}">
        <p>Crew Members</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('cruises.index') }}"
       class="nav-link {{ Request::is('cruises*') ? 'active' : '' }}">
        <p>Cruises</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('ports.index') }}"
       class="nav-link {{ Request::is('ports*') ? 'active' : '' }}">
        <p>Ports</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('passengers.index') }}"
       class="nav-link {{ Request::is('passengers*') ? 'active' : '' }}">
        <p>Passengers</p>
    </a>
</li>


