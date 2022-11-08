import { useEffect, useState } from "react";

const App = () => {
    const [person, setPerson] = useState(false);
    const loadPerson = async () => {
        const response = await fetch(`/api/people/1`);
        const data = await response.json();
        setPerson(data);
        console.log(data);
    };

    useEffect(() => {
        loadPerson();
    }, []);

    return person ? (
        <div id="returned-app-component">
            <h1>TEST</h1>
            <ul>
                <li>{person.name}</li>
                {/* <img src='/images/'{person.image.path} /> */}
                <li></li>
            </ul>
        </div>
    ) : (
        <></>
    );
};

export default App;
