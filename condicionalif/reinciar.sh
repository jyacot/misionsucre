# Script para reinicar contenidos de esta carpeta PHP

docker stop ejercicioif && \ 
docker rm ejercicioif && \
docker build -t 2dic . \
&& docker run -p 80:80 --name ejercicioif -d 2dic