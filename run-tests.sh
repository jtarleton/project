#!/bin/bash

retfunc()
{
    echo "this is retfunc()"
    return 1
}

exitfunc()
{
    echo "this is exitfunc()"
    exit 0
}

retfunc
echo "We are still here"
exitfunc
echo "We will never see this"
