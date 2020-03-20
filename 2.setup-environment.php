#Install nodejs
#node -version

#npm install -g typescript
#tsc -v


create file main.ts
export {}                // without this export this will be a script file (export make a module)

let name = 'lovekesh';    // if not export then define name: string = 'lovekesh';   
console.log(name);

run command
tsc main.ts    == this will create new file main.js

node main.js   == for output this will show the output name1

#tsc main.js --watch   ==  show the changes and errors