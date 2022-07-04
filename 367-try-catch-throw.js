function printNameUp(obj) 
    {
        try {
            console.log(obj.noame.toUpperCase());    
        } catch (error) {
            console.log(error);
        }
        
    }

const obj  = {nome: "Robert"} 

printNameUp(obj)