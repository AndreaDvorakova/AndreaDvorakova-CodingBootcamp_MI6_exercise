import React, { useState, useEffect } from "react";

const PeopleList = ({ selected_status, setSelectedStatus }) => {
    const [people, setPeople] = useState([]);
    const loadPeople = async () => {
        const response = await fetch(
            `http://www.mi6.test/api/people` +
                "?status=" +
                encodeURIComponent(selected_status)
        );
        const data = await response.json();
        setPeople(data);
        console.log(selected_status);
    };

    useEffect(() => {
        loadPeople();
    }, []);

    return (
        <ul>
            {people.map((person) => {
                return (
                    <a href={`/people-of-interest/${person.id}`}>
                        <li>{person.name}</li>
                    </a>
                );
            })}
        </ul>
    );
};

export default PeopleList;
