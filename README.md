#### Array Sorting
I have used Linear Search algorithm in this code. Linear search is a simple searching algorithm that sequentially checks each element of the array until it finds the target element or reaches the end of the array.

Sorting the Array: First, the script creates a copy of the original array and sorts it in ascending order using the sort() function. Sorting is essential to enable binary search or find the appropriate index for insertion.
Finding the Preferable Index: The script iterates through the sorted array. If an element greater than or equal to the target number is found, it sets the preferable index to the index of that element. This approach ensures that the index returned represents where the target would be inserted to maintain sorted order.
Printing the Result: Finally, the script prints the preferable index, which indicates where the target would be inserted in the sorted array.
