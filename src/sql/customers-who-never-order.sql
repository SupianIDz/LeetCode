/*
 * @link       https://leetcode.com/problems/customers-who-never-order/
 * @difficulty EASY
 */
SELECT c.name AS Customers FROM Customers c LEFT JOIN Orders o ON c.id = o.customerId WHERE o.customerId IS NULL;
