- こちらのコマンドを実行する際に
```bash
$ curl -s "https://laravel.build/laravel-study?with=mysql,mailpit" | bash
```
下記のエラーが表示されたら
```bash
docker: Error: remote trust data does not exist for docker.io/docker/whalesay: notary.docker.io does not have trust data for docker.io/docker/whalesay.
See 'docker run --help'.
```
Dockerのセキュリティ機能であるDOCKER_CONTENT_TRUST（DCT）を無効にする
```bash
$ export DOCKER_CONTENT_TRUST=0
```

- こちらでショートカットを設定したので
```bash
echo "alias sail='[ -f sail ] && bash sail || bash vendor/bin/sail'" >> ~/.zshrc
exec $SHELL -l
```
こちらで起動
```bash
% sail up -d
```