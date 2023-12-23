docker build -t kengetan/from from

docker image ls

#RUN Intruction
docker build -t kengetan/run run

#DELETE Docker Image
docker image rm kengetan/run

docker build -t kengetan/run run --progress=plain --no-cache

# CMD Instruction
docker build -t kengetan/cmddocker cmddocker

docker image inspect kengetan/cmddocker

docker container create --name cmddocker kengetan/cmddocker

docker container start cmddocker

docker container logs cmddocker

#LABEL Instruction
docker build -t kengetan/label label

docker image inspect kengetan/label

#ADD Instruction
docker build -t kengetan/add add

docker container create --name add kengetan/add

docker container start add

docker container logs add