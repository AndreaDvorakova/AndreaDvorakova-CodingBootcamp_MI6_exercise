import React, { useState, useEffect } from "react";

const StatusFilter = ({ selected_status, setSelectedStatus }) => {
    const [statuses, setStatuses] = useState([]);

    const loadStatuses = async () => {
        const response = await fetch("http://www.mi6.test/api/statuses");
        const data = await response.json();
        setStatuses(data);
    };

    useEffect(() => {
        loadStatuses();
    }, []);

    return (
        <>
            <div className="status-filter">This is the status filter</div>
            {statuses.map((status) => {
                return (
                    <>
                        <button
                            onClick={() => {
                                setSelectedStatus(status.id);
                                console.log(selected_status);
                            }}
                        >
                            {status.name}
                        </button>
                    </>
                );
            })}
            {console.log(selected_status)}
        </>
    );
};

export default StatusFilter;
