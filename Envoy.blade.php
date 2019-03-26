@servers(['web' => 'root@47.107.71.191'])

@task('deploy', ['on' => ['web'], 'confirm' => true])
cd /var/www/laraBlog
git pull
@endtask
