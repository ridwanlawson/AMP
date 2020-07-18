<aside id="sidebar-wrapper">
  <div class="sidebar-brand">
    <a href="">{{ env('APP_NAME') }}</a>
  </div>
  <div class="sidebar-brand sidebar-brand-sm">
    <a href="#">{{ strtoupper(substr(env('APP_NAME'), 0, 2)) }}</a>
  </div>
  <ul class="sidebar-menu">
   
    <li class="{{ request()->is('table') ? 'active' : '' }}"><a href="{{ url('table') }}"><i class="fa fa-envelope-open" aria-hidden="true"></i> <span>Informasi Surat Masuk</span></a></li>
    
    <li class="{{ request()->is('table') ? 'active' : '' }}"><a href="{{ url('table') }}"><i class="fa fa-paper-plane" aria-hidden="true"></i> <span>Informasi Surat Keluar</span></a></li>
    <li class="{{ request()->is('table') ? 'active' : '' }}"><a href="{{ url('table') }}"><i class="fa fa-info" aria-hidden="true"></i> <span>Informasi Masuk Follow Up Disposisi</span></a></li>
    <li class="{{ request()->is('table') ? 'active' : '' }}"><a href="{{ url('table') }}"><i class="fa fa-sticky-note" aria-hidden="true"></i> <span>Informasi Pengelolaan Katalog</span></a></li>
    <li class="{{ request()->is('table') ? 'active' : '' }}"><a href="{{ url('table') }}"><i class="fa fa-cubes" aria-hidden="true"></i> <span>Inventaris</span></a></li>
    <li class="{{ request()->is('table') ? 'active' : '' }}"><a href="{{ url('table') }}"><i class="fa fa-archive" aria-hidden="true"></i> <span>Mutasi Inventaris</span></a></li>
    <li class="{{ request()->is('table') ? 'active' : '' }}"><a href="{{ url('table') }}"><i class="fa fa-sitemap" aria-hidden="true"></i> <span>Standar Operasional Prosedur Divisi</span></a></li>
    <li class="{{ request()->is('table') ? 'active' : '' }}"><a href="{{ url('table') }}"><i class="fa fa-users" aria-hidden="true"></i> <span>Informasi Data SDM</span></a></li>
    <li class="{{ request()->is('table') ? 'active' : '' }}"><a href="{{ url('table') }}"><i class="fa fa-gavel" aria-hidden="true"></i> <span>Regulasi Bid.Div.Terkait</span></a></li>
    <li class="{{ request()->is('table') ? 'active' : '' }}"><a href="{{ url('table') }}"><i class="fa fa-info-circle" aria-hidden="true"></i> <span>Informasi Data PIC</span></a></li>
    <li class="{{ request()->is('table') ? 'active' : '' }}"><a href="{{ url('table') }}"><i class="fa fa-industry" aria-hidden="true"></i> <span>Direct Transaction Information</span></a></li>
    <li class="{{ request()->is('table') ? 'active' : '' }}"><a href="{{ url('table') }}"><i class="fa fa-calendar" aria-hidden="true"></i> <span>General Calender</span></a></li>
    <li class="{{ request()->is('table') ? 'active' : '' }}"><a href="{{ url('table') }}"><i class="fa fa-exclamation" aria-hidden="true"></i> <span>Data Problem User</span></a></li>
    <li class="{{ request()->is('table') ? 'active' : '' }}"><a href="{{ url('table') }}"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> <span>Data Problem Karyawan</span></a></li>
    <li class="{{ request()->is('table') ? 'active' : '' }}"><a href="{{ url('table') }}"><i class="fa fa-exclamation-circle" aria-hidden="true"></i> <span>Data Problem Instansi</span></a></li>
    <li class="{{ request()->is('table') ? 'active' : '' }}"><a href="{{ url('table') }}"><i class="fa fa-address-book" aria-hidden="true"></i> <span>Data Problem Problem PIC/Supervisor</span></a></li>
    <li class="{{ request()->is('table') ? 'active' : '' }}"><a href="{{ url('table') }}"><i class="fa fa-check-circle" aria-hidden="true"></i> <span>Informasi Penyelesaian Problem Solving</span></a></li>
    <li class="{{ request()->is('table') ? 'active' : '' }}"><a href="{{ url('table') }}"><i class="fa fa-folder-open" aria-hidden="true"></i> <span>Format Adm. dan Dokumentasi</span></a></li>
    <li class="{{ request()->is('table') ? 'active' : '' }}"><a href="{{ url('table') }}"><i class="fa fa-male" aria-hidden="true"></i> <span>Kinerja Karyawan</span></a></li>
    <li class="{{ request()->is('table') ? 'active' : '' }}"><a href="{{ url('table') }}"><i class="fa fa-id-badge" aria-hidden="true"></i> <span>Notulen Rapat</span></a></li>
    <li class="{{ request()->is('table') ? 'active' : '' }}"><a href="{{ url('table') }}"><i class="fa fa-id-card" aria-hidden="true"></i> <span>Rekap Kinerja Karyawan</span></a></li>
    <li class="{{ request()->is('table') ? 'active' : '' }}"><a href="{{ url('table') }}"><i class="fa fa-file" aria-hidden="true"></i> <span>SPPD</span></a></li>
  </ul>
</aside>
